workflow "New workflow" {
  on = "release"
  resolves = ["/dev/google-cloud"]
}

action "/dev/google-cloud" {
  uses = "dev/google-cloud"
  runs = "split"
}
